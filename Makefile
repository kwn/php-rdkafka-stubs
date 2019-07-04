test:
	mkdir -p build
	vendor/bin/phpunit

build: test
