pipeline {
    agent any
    stages {
        
        stage('Build dev accounting-dist') {
            when {
                branch 'master'
                
            }
            steps {
                echo 'preparando construcción en entorno desarollo'
                sh 'ping 8.8.8.8 -c 5'
                sh 'ssh devops@ipserver cd /ruta/ && npm install'



                }
        }
      
    }
}