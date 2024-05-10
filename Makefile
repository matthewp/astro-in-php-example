
.PHONY: build
build:
	cd astro-project && npm install && npm run build

.PHONY: serve
serve:
	@php -S localhost:8000
