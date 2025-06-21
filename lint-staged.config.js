export default {
    "**/*.php*": [
        "vendor/bin/rector process",
        "vendor/bin/duster fix",
        "vendor/bin/phpstan analyze",
    ]
}
