<?php

/** @psalm-immutable */
final class Email
{
    public $email;

    public function __construct(string $email, StdClass $teste)
    {
        $this->email = $email;
    }
}

$reflectionClass = new ReflectionClass('Email');

echo '<pre>';

echo $reflectionClass->getName() . PHP_EOL;
echo ($reflectionClass->isFinal() ? 'Final' : 'Not final') . PHP_EOL;
echo $reflectionClass->getDocComment() . PHP_EOL;
echo $reflectionClass->getConstructor()->getNumberOfParameters() . PHP_EOL;

echo PHP_EOL . 'Property:' . PHP_EOL . PHP_EOL;

/** @var ReflectionProperty $property */
$property = $reflectionClass->getProperties();

print_r($property);



echo $property->getName() . PHP_EOL;
// echo ($property->isPrivate() ? 'public' : 'not public') . PHP_EOL;
// echo $property->getType() . PHP_EOL;