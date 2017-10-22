pipeline {
    agent any 


        stage('Build') { 
              node {
                  checkout scm 
            }
        }
        stage('build docker image') {
    steps {
        sh 'docker-compose up -d'
    }
}
        
            
        }
    }
