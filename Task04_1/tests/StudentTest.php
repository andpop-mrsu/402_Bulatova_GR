<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Student;

class StudentTest extends TestCase
{

    public function test_TextRepresentation(): void
    {
        $s1 = new Student();
        $s1->setName("Гуля")->setLastName("Булатова")->setFaculty("ФМиИТ")->setCourse(4)->setGroup(402);
        self::assertSame(
            "Id: 1" . "\n" .
            "Фамилия: Булатова" . "\n" .
            "Имя: Гуля" . "\n" .
            "Факультет: ФМиИТ" . "\n" .
            "Курс: 4" . "\n" .
            "Группа: 402",
            $s1->__toString()
        );
    }

    public function test_GetFuntions(): void
    {
        $s1 = new Student();
        $s1->setName("Гуля")->setLastName("Булатова")->setFaculty("ФМиИТ")->setCourse(4)->setGroup(402);
        self::assertSame("Гуля", $s1->getName());
        self::assertSame("Булатова", $s1->getLastName());
        self::assertSame("ФМиИТ", $s1->getFaculty());
        self::assertSame(4, $s1->getCourse());
        self::assertSame(402, $s1->getGroup());
    }
}
