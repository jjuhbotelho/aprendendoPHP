<?php

class TeamException extends Exception
{
    public static function fromTooManyMembers()
    {
        return new static('You may not add more than 3 team members');
    }
}

class Member
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Team
{
    protected $members = [];

    public function add(Member $member)
    {
        if (count($this->members) === 3) {
            throw TeamException::fromTooManyMembers();
        }
        $this->members[] = $member;
    }

    public function members()
    {
        return $this->members;
    }
}

class TeamMembersController
{
    public function store()
    {
        $team = new Team; //Time tem um máximo de 3 membros.

        try {
            $team->add(new Member('Fulana de Tal'));
            $team->add(new Member('Fulano de Tal'));
            $team->add(new Member('Jane de Tal'));
            $team->add(new Member('João de Tal'));

            print_r($team->members());
        } catch (TeamException $e) {
            var_dump($e->getMessage());
        }
    }
}

(new TeamMembersController())->store();
