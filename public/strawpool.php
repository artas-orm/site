<?php

declare(strict_types=1);

require '../src/doctrine.php';

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\{
    ConstraintViolation,
    Validation
};
use Artas\Site\Entity\Strawpool;

$strawpool = createStrawpool(resolvePost());
$errors = Validation::createValidatorBuilder()
    ->addYamlMapping(__DIR__ . '/../src/Validation/Strawpool.yml')
    ->getValidator()
    ->validate($strawpool, null, ['add']);

header('Content-type: application/json');
if (count($errors) > 0) {
    $errorsAsString = [];
    /** @var ConstraintViolation $error */
    foreach ($errors as $error) {
        $errorsAsString[$error->getPropertyPath()] = $errorsAsString[$error->getPropertyPath()] ?? [];
        $errorsAsString[$error->getPropertyPath()][] = $error->getMessage();
    }

    echo json_encode([
        'result' => false,
        'errors' => $errorsAsString
    ]);
} else {
    echo json_encode(['result' => true]);
}

function createStrawpool(array $data)
{
    return (new Strawpool())
        ->setInterested($data['interested'])
        ->setPhpVersion($data['phpVersion'])
        ->setDbal($data['dbal'])
        ->setSqlByOwn($data['sqlByOwn'])
        ->setDbmsMysql($data['dbmsMysql'])
        ->setDbmsOci($data['dbmsOci'])
        ->setDbmsSqlServer($data['dbmsSqlServer'])
        ->setDbmsPostgreSql($data['dbmsPostgreSql'])
        ->setDbmsDb2($data['dbmsDb2'])
        ->setDbmsSqLite($data['dbmsSqlite'])
        ->setDbmsOther($data['dbmsOther'])
        ->setImportancePerformance($data['importancePerformance'])
        ->setImportanceReleasesFrequency($data['importanceReleasesFrequency'])
        ->setImportanceCodeExtensibility($data['importanceExtensibility'])
        ->setImportanceCommunity($data['importanceCommunity'])
        ->setCrowdFunding($data['crowdfunding'])
        ->setFrameworkSymfony2($data['frameworkSymfony2'])
        ->setFrameworkSymfony3($data['frameworkSymfony3'])
        ->setFrameworkZend2($data['frameworkZend2'])
        ->setFrameworkZend3($data['frameworkZend3'])
        ->setFrameworkLaravel54($data['frameworkLaravel54'])
        ->setFrameworkNette24($data['frameworkNette24'])
        ->setFrameworkOther($data['frameworkOther'])
        ->setChooseArtas($data['chooseArtas'])
        ->setPreferedFeatures($data['preferedFeatures'])
        ->setFaults($data['faults']);
}

function resolvePost(): array
{
    $boolNormalizer = function(OptionsResolver $resolver, $value) {
        return $value === null ? null : boolval($value);
    };

    $intNormalizer = function(OptionsResolver $resolver, $value) {
        if ($value === null || $value === '') {
            $return = null;
        } elseif (is_numeric($value)) {
            $return = intval($value);
        } else {
            throw new \Exception('"' . $value . '" must be numeric.');
        }

        return $return;
    };

    $emptyToNullNormalizer = function(OptionsResolver $resolver, $value) {
        return $value === null || $value === '' ? null : $value;
    };

    $resolver = (new OptionsResolver())
        ->setDefault('interested', null)
        ->setAllowedTypes('interested', ['null', 'string'])
        ->setNormalizer('interested', $boolNormalizer)

        ->setDefault('phpVersion', null)
        ->setAllowedTypes('phpVersion', ['null', 'string'])
        ->setNormalizer('phpVersion', $intNormalizer)

        ->setDefault('dbal', null)
        ->setAllowedTypes('dbal', ['null', 'string'])
        ->setNormalizer('dbal', $boolNormalizer)

        ->setDefault('sqlByOwn', null)
        ->setAllowedTypes('sqlByOwn', ['null', 'string'])
        ->setNormalizer('sqlByOwn', $boolNormalizer)

        ->setDefault('dbmsMysql', '0')
        ->setAllowedTypes('dbmsMysql', 'string')
        ->setNormalizer('dbmsMysql', $boolNormalizer)

        ->setDefault('dbmsOci', '0')
        ->setAllowedTypes('dbmsOci', 'string')
        ->setNormalizer('dbmsOci', $boolNormalizer)

        ->setDefault('dbmsSqlServer', '0')
        ->setAllowedTypes('dbmsSqlServer', 'string')
        ->setNormalizer('dbmsSqlServer', $boolNormalizer)

        ->setDefault('dbmsPostgreSql', '0')
        ->setAllowedTypes('dbmsPostgreSql', 'string')
        ->setNormalizer('dbmsPostgreSql', $boolNormalizer)

        ->setDefault('dbmsDb2', '0')
        ->setAllowedTypes('dbmsDb2', 'string')
        ->setNormalizer('dbmsDb2', $boolNormalizer)

        ->setDefault('dbmsSqlite', '0')
        ->setAllowedTypes('dbmsSqlite', 'string')
        ->setNormalizer('dbmsSqlite', $boolNormalizer)

        ->setDefault('dbmsOther', '0')
        ->setAllowedTypes('dbmsOther', 'string')
        ->setNormalizer('dbmsOther', $boolNormalizer)

        ->setDefault('importancePerformance', null)
        ->setAllowedTypes('importancePerformance', ['null', 'string'])
        ->setNormalizer('importancePerformance', $intNormalizer)

        ->setDefault('importanceReleasesFrequency', null)
        ->setAllowedTypes('importanceReleasesFrequency', ['null', 'string'])
        ->setNormalizer('importanceReleasesFrequency', $intNormalizer)

        ->setDefault('importanceExtensibility', null)
        ->setAllowedTypes('importanceExtensibility', ['null', 'string'])
        ->setNormalizer('importanceExtensibility', $intNormalizer)

        ->setDefault('importanceCommunity', null)
        ->setAllowedTypes('importanceCommunity', ['null', 'string'])
        ->setNormalizer('importanceCommunity', $intNormalizer)

        ->setDefault('crowdfunding', null)
        ->setAllowedTypes('crowdfunding', ['null', 'string'])
        ->setNormalizer('crowdfunding', $boolNormalizer)

        ->setDefault('frameworkSymfony2', '0')
        ->setAllowedTypes('frameworkSymfony2', 'string')
        ->setNormalizer('frameworkSymfony2', $boolNormalizer)

        ->setDefault('frameworkSymfony3', '0')
        ->setAllowedTypes('frameworkSymfony3', 'string')
        ->setNormalizer('frameworkSymfony3', $boolNormalizer)

        ->setDefault('frameworkZend2', '0')
        ->setAllowedTypes('frameworkZend2', 'string')
        ->setNormalizer('frameworkZend2', $boolNormalizer)

        ->setDefault('frameworkZend3', '0')
        ->setAllowedTypes('frameworkZend3', 'string')
        ->setNormalizer('frameworkZend3', $boolNormalizer)

        ->setDefault('frameworkLaravel54', '0')
        ->setAllowedTypes('frameworkLaravel54', 'string')
        ->setNormalizer('frameworkLaravel54', $boolNormalizer)

        ->setDefault('frameworkNette24', '0')
        ->setAllowedTypes('frameworkNette24', 'string')
        ->setNormalizer('frameworkNette24', $boolNormalizer)

        ->setDefault('frameworkOther', '0')
        ->setAllowedTypes('frameworkOther', 'string')
        ->setNormalizer('frameworkOther', $boolNormalizer)

        ->setDefault('chooseArtas', null)
        ->setAllowedTypes('chooseArtas', ['null', 'string'])
        ->setNormalizer('chooseArtas', $emptyToNullNormalizer)

        ->setDefault('preferedFeatures', null)
        ->setAllowedTypes('preferedFeatures', ['null', 'string'])
        ->setNormalizer('preferedFeatures', $emptyToNullNormalizer)

        ->setDefault('faults', null)
        ->setAllowedTypes('faults', ['null', 'string'])
        ->setNormalizer('faults', $emptyToNullNormalizer);

    return $resolver->resolve($_POST);
}
