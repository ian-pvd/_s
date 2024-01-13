# PVD Industrial _s Changelog

## 1.2.0 (2024-01-12)
- Require Stylelint to pass before compiling css for production.
- Refactor Sass files and imports.
- Refactor & rename files and folders.
- Add media query variables partial.

## 1.1.0 (2024-01-11)
- New build script `npm run compile:prod` will lint & fix your SCSS files before compiling them. It also compiles Sass files into minified CSS.
- Added a `/build` folder for node-sass compiler output.
- Removed built files from version control.
- Refactored and moved subfolders & files in the `/sass` directory. Folders now use an _index.scss file for imports.
- Changed Stylelint rules: alpha-order, empty lines before at-rules, variable-mixin-property declaration order, max nesting depth, no duplicate selectors.
