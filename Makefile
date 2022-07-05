all: lint

lint:
	phpcs --standard=PSR2 --report=emacs src

server:
	php -S localhost:8080 -t src -d display_errors=1 -d error_reporting=E_ALL

tags:
	@rm -f tags
	@ctags -R src

.PHONY: all lint server tags
