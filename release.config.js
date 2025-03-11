module.exports = {
    branches: [{name: 'main'}],
    repositoryUrl: 'https://gitlab.com/plusforta/public/soapbundle.git',
    plugins: [
        '@semantic-release/commit-analyzer',
        '@semantic-release/release-notes-generator',
        '@iwavesmedia/semantic-release-composer',
        [
            "@semantic-release/changelog",
            {
                "changelogFile": "CHANGELOG.md"
            }
        ],
        [
            '@semantic-release/git',
            {
                assets: ['composer.json', 'CHANGELOG.md'],
                message: 'chore(release): ${nextRelease.version} [no ci]', // Changed to [no ci]
            },
        ],
    ],
};