module.exports = {
  'extends': 'stylelint-config-standard',
  'rules': {
    'no-empty-source': null,
    'string-quotes': 'double',
    'indentation': 'tab',
    'block-closing-brace-newline-before': 'always',
    'no-missing-end-of-source-newline': false,
    'max-empty-lines': 4,
    'no-descending-specificity': null,
    'font-family-no-missing-generic-family-keyword': null,
    'no-eol-whitespace': null,
    'at-rule-empty-line-before': null,
    'rule-empty-line-before': null,
    'declaration-empty-line-before': null,
    'block-closing-brace-empty-line-before': null,
    'no-missing-end-of-source-newline': null,
    'length-zero-no-unit': null,
    'selector-list-comma-newline-after': null,
    'selector-pseudo-element-colon-notation': null,
    'number-leading-zero': null,
    'comment-whitespace-inside': null,
    'comment-empty-line-before': null,
    'block-closing-brace-newline-before': null,
    'string-quotes': null,
    'function-comma-space-after': null,
    'at-rule-no-unknown': [
      true,
      {
        'ignoreAtRules': [
          'extend',
          'at-root',
          'debug',
          'warn',
          'error',
          'if',
          'else',
          'for',
          'each',
          'while',
          'mixin',
          'include',
          'content',
          'return',
          'function',
          'tailwind',
          'apply',
          'responsive',
          'variants',
          'screen',
        ],
      },
    ],
  },
};
