pipeline {
    agent any
    stages {
        stage('Lint') {
            steps {
                sh 'docker build . --target lint'
            }
        }
        stage('Type Checking') {
            steps {
                sh 'docker build . --target psalm'
            }
        }
    }
 }
