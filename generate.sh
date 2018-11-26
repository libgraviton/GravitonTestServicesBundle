CURRENT_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

php vendor/bin/analytics-convert -m "\MongoDate" --classNamespace 'Graviton\TestServicesBundle\Pipeline' ${CURRENT_DIR}/Resources/analytics ${CURRENT_DIR}/src/Pipeline
