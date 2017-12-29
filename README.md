# HandlebarsDemo

The PHP way: <http://localhost:8000/demo.php<>

The JavaScript way: <http://localhost:8000/demo.html>

## Development

Run `npm run serve`.

## The PHP way

- Composer installed package `xamin/handlebars.php`
- `demo.php` fetches data, opens `template.txt` and renders with Handlebars

## The JavaScript way

- HTML page loads `handlebars.js` from CDN.
- HTML page loads `template.txt` via HTTP.
- Renders page and displays it into `#content`.
