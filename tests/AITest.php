<?php

use PHPUnit\Framework\TestCase;

final class AITest extends TestCase
{
    public function testGender_Male(): void
    {
        $result = AI::getGender('สวัสดีครับ');
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }

    public function testGender_Female(): void
    {
        $result = AI::getGender('สวัสดีค่ะ');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Positive(): void
    {
        $result = AI::getSentiment('ดีใจ');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Negative(): void
    {
        $result = AI::getSentiment('เสียใจ');
        $expected_result = 'Negative';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Neutral(): void
    {
        $result = AI::getSentiment('คุณ');
        $expected_result = 'Neutral';
        $this->assertEquals($expected_result, $result);
    }

    public function testRudeWords(): void
    {
        $result = AI::getRudeWords('ไอควาย');
        $expected_result = ['ไอควาย'];
        $this->assertEquals($expected_result, $result);
    }

    public function testLanguages_TH(): void
    {
        $result = AI::getLanguages('ง่วง');
        $expected_result = ['TH'];
        $this->assertEquals($expected_result, $result);
    }

    public function testLanguages_EN(): void
    {
        $result = AI::getLanguages('Languages');
        $expected_result = ['EN'];
        $this->assertEquals($expected_result, $result);
    }


    
}