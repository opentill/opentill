export default {
    "**/*.php*": [
        "vendor/bin/rector process --dry-run --no-progress-bar",
        "vendor/bin/duster fix"
    ]
}
