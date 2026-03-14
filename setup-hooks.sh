#!/bin/sh
#
# Installs git hooks from hooks/ into .git/hooks/.
# Safe to re-run — overwrites existing hooks.
#

HOOKS_DIR="$(git rev-parse --show-toplevel)/.git/hooks"

if [ ! -d "$HOOKS_DIR" ]; then
    echo "ERROR: .git/hooks directory not found. Are you in a git repository?"
    exit 1
fi

SCRIPT_DIR="$(cd "$(dirname "$0")" && pwd)"

cp "$SCRIPT_DIR/hooks/commit-msg" "$HOOKS_DIR/commit-msg"
cp "$SCRIPT_DIR/hooks/pre-commit" "$HOOKS_DIR/pre-commit"

chmod +x "$HOOKS_DIR/commit-msg"
chmod +x "$HOOKS_DIR/pre-commit"

echo "Git hooks installed successfully."
