<?php

use Mockery as m;

class MessageModelTest extends PHPUnit_Framework_TestCase {
  
    protected $createdMessages = array();

    public function createMessage( $customAttributes = array())
    {
        $testInput = [
            'entry' => 'Test entry'
        ];

        $messageData = array_merge($testInput, $customAttributes);
        $message = new Talktalk\Message();
            $message->fill($messageData);
        $message->save();

        $this->createdMessages[] = $message;

        return $message;
    }

    public function testMessageIsCreated()
    {
        $message = $this->createMessage();
        $this->assertEquals('default', $message->entry);
    }

    public function tearDown() {
        foreach ($this->createdMessages as $message) {
            $message->delete();
        }
        m::close();
    }
}
