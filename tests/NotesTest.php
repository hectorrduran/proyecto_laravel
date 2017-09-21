<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{
    
    public function test_notes_list()
    {
    	//condiciones de prueba
    	Note::create(['note'=>'My first note']);
    	Note::create(['note'=>'Second note']);
   // acciones de usuario
        $this->visit('notes')
        //comprobaciones
        	->see("My first note")
        	->see("Second note");
    }
}
