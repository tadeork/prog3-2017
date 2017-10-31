<?php

class TodoList
{
    private $tasks = [
        ["Hacer gimnasia", "completada"],
        ["Comprar comida", "incompleta"],
        
    ];
    
    public function addTodo($taks)
    {
        
    }
    
    public function readTasks()
    {
        return $this->tasks;
    }
}

