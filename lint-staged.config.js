module.exports = {
  "**/*.php":
    "php ./tools/php-cs-fixer/vendor/bin/php-cs-fixer fix --config .php-cs-fixer.php",
  "*.{js,css,md}": "prettier --write",
};
