pipeline {
    agent any 


        stage('Build') { 
              node {
                  checkout scm 
            }
        }
        stage('docker-compose image') {
    steps {
        sh 'docker-compose up -d'
    }
  }
}
   
