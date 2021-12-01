<?php

use PHPUnit\Framework\TestCase;

class ConstantsTest extends TestCase
{
    /** @var array */
    private static $stubConstants;

    /** @var array */
    private static $extensionConstants;

    public static function setUpBeforeClass(): void
    {
        self::$extensionConstants = get_defined_constants(true)['rdkafka'];
        self::$stubConstants = self::loadConstantsFromStub();
    }

    public function testConstantsExistInStubOnly()
    {
        // constants that present in stub but not in extension
        $stubConstantsNotInExtension = array_diff_key(
            self::$stubConstants,
            array_flip([
                /** @link https://github.com/edenhill/librdkafka/blob/master/src/rdkafka.h */
                'RD_KAFKA_RESP_ERR_GROUP_LOAD_IN_PROGRESS', // RD_KAFKA_RESP_ERR_GROUP_LOAD_IN_PROGRESS
                'RD_KAFKA_RESP_ERR_GROUP_COORDINATOR_NOT_AVAILABLE', // RD_KAFKA_RESP_ERR_COORDINATOR_NOT_AVAILABLE
                'RD_KAFKA_RESP_ERR_NOT_COORDINATOR_FOR_GROUP', // RD_KAFKA_RESP_ERR_NOT_COORDINATOR
                'RD_KAFKA_OFFSET_INVALID', // not present in extension
            ]),
            self::$extensionConstants
        );

        $this->assertCount(
            0,
            $stubConstantsNotInExtension,
            sprintf(
                'In stub but not in extension: %s',
                var_export($stubConstantsNotInExtension, true)
            )
        );
    }

    public function testConstantsExistInExtensionOnly()
    {
        // constants that present in extension but not in stub
        $extensionConstantsNotInStub = array_diff_key(
            self::$extensionConstants,
            self::$stubConstants
        );

        $this->assertCount(
            0,
            $extensionConstantsNotInStub,
            sprintf(
                'In extension but not in stub: %s',
                var_export($extensionConstantsNotInStub, true)
            )
        );
    }

    public function testConstantsExistButInvalidValue()
    {
        $extensionConstants = self::$extensionConstants;
        $stubConstants = self::$stubConstants;

        // unset because depends of extension version
        unset($extensionConstants['RD_KAFKA_VERSION']);
        unset($extensionConstants['RD_KAFKA_BUILD_VERSION']);
        unset($stubConstants['RD_KAFKA_VERSION']);
        unset($stubConstants['RD_KAFKA_BUILD_VERSION']);

        // constants in both places but has different values
        $this->assertEquals(
            array_intersect_key(
                $extensionConstants,
                $stubConstants
            ),
            array_intersect_key(
                $stubConstants,
                $extensionConstants
            )
        );
    }

    private static function loadConstantsFromStub(): array
    {
        $stubConstants = [];
        $constantsStubFile = fopen(__DIR__ . '/../stubs/constants.php', 'r+');
        while (!feof($constantsStubFile)) {
            $line = trim(fgets($constantsStubFile));
            if (!preg_match('/const ([0-9A-Z_]+) = (.+);/', $line, $matches)) {
                continue;
            }

            $stubConstants[$matches[1]] = (int) $matches[2];
        }

        return $stubConstants;
    }
}
