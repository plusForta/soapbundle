module.exports = {
    extends: ['@commitlint/config-conventional'],
    rules: {
        'jira-issue-rule': [2, 'always'],
        'header-max-length': [1, 'always', 256],
        'subject-case': [0, 'never'],
        'body-case': [0, 'never'],
    },
    plugins: [
        {
            rules: {
                'jira-issue-rule': ({ scope, header }) => {
                    const jiraRegex = /(PF-\d{4,5})/;
                    const allowedTypes = ['feat','fix','refactor', 'chore', 'style', 'test', 'docs'];
                    const type = header.split('(')[0].split(':')[0];

                    if (allowedTypes.includes(type)) {
                        return [true];
                    }

                    return [
                        jiraRegex.test(scope),
                        `Commit message must reference a Jira issue (e.g., PF-XXXX or PF-XXXXX) in scope for types like feat or fix`,
                    ];
                },
            },
        },
    ],
};
