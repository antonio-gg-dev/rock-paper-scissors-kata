<?php declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissors;
use PHPUnit\Framework\TestCase;

class RockPaperScissorsTest extends TestCase
{
    public function test_player1_rock_should_beat_player2_scissors(): void
    {
        $rockPaperScissors = new RockPaperScissors();

        $result = $rockPaperScissors->play(RockPaperScissors::MOVE_ROCK, RockPaperScissors::MOVE_SCISSORS);

        self::assertSame('player1 wins', $result);
    }

    public function test_player2_rock_should_beat_player1_scissors(): void
    {
        $rockPaperScissors = new RockPaperScissors();

        $result = $rockPaperScissors->play(RockPaperScissors::MOVE_SCISSORS, RockPaperScissors::MOVE_ROCK);

        self::assertSame('player2 wins', $result);
    }

    public function test_player1_paper_should_beat_player2_rock(): void
    {
        $rockPaperScissors = new RockPaperScissors();

        $result = $rockPaperScissors->play(RockPaperScissors::MOVE_PAPER, RockPaperScissors::MOVE_ROCK);

        self::assertSame('player1 wins', $result);
    }

    public function test_player2_paper_should_beat_player1_rock(): void
    {
        $rockPaperScissors = new RockPaperScissors();

        $result = $rockPaperScissors->play(RockPaperScissors::MOVE_ROCK, RockPaperScissors::MOVE_PAPER);

        self::assertSame('player2 wins', $result);
    }

    public function test_player1_scissor_should_beat_player2_paper(): void
    {
        $rockPaperScissors = new RockPaperScissors();

        $result = $rockPaperScissors->play(RockPaperScissors::MOVE_SCISSORS, RockPaperScissors::MOVE_PAPER);

        self::assertSame('player1 wins', $result);
    }

    public function test_player2_scissor_should_beat_player1_paper(): void
    {
        $rockPaperScissors = new RockPaperScissors();

        $result = $rockPaperScissors->play(RockPaperScissors::MOVE_PAPER, RockPaperScissors::MOVE_SCISSORS);

        self::assertSame('player2 wins', $result);
    }

    public function test_player1_rock_should_draw_player2_rock(): void
    {
        $rockPaperScissors = new RockPaperScissors();

        $result = $rockPaperScissors->play(RockPaperScissors::MOVE_ROCK, RockPaperScissors::MOVE_ROCK);

        self::assertSame('draw', $result);
    }

    public function test_player1_scissors_should_draw_player2_scissors(): void
    {
        $rockPaperScissors = new RockPaperScissors();

        $result = $rockPaperScissors->play(RockPaperScissors::MOVE_SCISSORS, RockPaperScissors::MOVE_SCISSORS);

        self::assertSame('draw', $result);
    }

    public function test_player1_paper_should_draw_player2_paper(): void
    {
        $rockPaperScissors = new RockPaperScissors();

        $result = $rockPaperScissors->play(RockPaperScissors::MOVE_PAPER, RockPaperScissors::MOVE_PAPER);

        self::assertSame('draw', $result);
    }
}
