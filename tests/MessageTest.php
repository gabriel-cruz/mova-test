<?php

use PHPUnit\Framework\TestCase;
use App\Strategy\Thursday;
use App\Strategy\Birthday;
use App\Strategy\Tuesday;
use App\Strategy\Wednesday;
use App\Strategy\Friday;
use App\Strategy\Monday;
use App\Strategy\Saturday;
use App\Strategy\Sunday;

class MessageTest extends TestCase
{
    /**
     * @covers App\Strategy\Birthday
     */
    public function testMessageBirthDay() {
        $birthDay = new Birthday();
        $this->assertEquals("Hoje é seu aniversáio!", $birthDay->message());
    }
    /**
     * @covers App\Strategy\Monday
     */
    public function testMessageMonday() {
        $monday = new Monday();
        $this->assertEquals("Hoje é segunda!", $monday->message());
    }
    /**
     * @covers App\Strategy\Tueday
     */
    public function testMessageTuesday() {
        $tuesday = new Tuesday();
        $this->assertEquals("Hoje é terça!", $tuesday->message());
    }
    /**
     * @covers App\Strategy\Wednesday
     */
    public function testMessageWednesday() {
        $wednesday = new Wednesday();
        $this->assertEquals("Hoje é quarta!", $wednesday->message());
    }
    /**
     * @covers App\Strategy\Thursday
     */
    public function testMessageThursday() {
        $thursday = new Thursday();
        $this->assertEquals("Hoje é quinta!", $thursday->message());
    }
    /**
     * @covers App\Strategy\Friday
     */
    public function testMessageFriday() {
        $friday = new Friday();
        $this->assertEquals("Hoje é sexta!", $friday->message());
    }
    /**
     * @covers App\Strategy\Saturday
     */
    public function testMessageSaturday() {
        $saturday = new Saturday();
        $this->assertEquals("Hoje é sábado!", $saturday->message());
    }
    /**
     * @covers App\Strategy\Sunday
     */
    public function testMessageSunday() {
        $sunday = new Sunday();
        $this->assertEquals("Hoje é domingo!", $sunday->message());
    }
}