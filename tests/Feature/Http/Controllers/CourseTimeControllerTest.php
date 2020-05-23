<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CourseTimeController
 */
class CourseTimeControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function destroy_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $course_time = factory(\App\Models\CourseTime::class)->create();

        $response = $this->delete('coursetime/{id}');

        $response->assertOk();
        $this->assertDeleted($course_time);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function edit_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $course = factory(\App\Models\Course::class)->create();

        $response = $this->get('coursetime/{course}/edit');

        $response->assertOk();
        $response->assertViewIs('courses.schedule');
        $response->assertViewHas('course');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function get_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $course = factory(\App\Models\Course::class)->create();

        $response = $this->get('coursetime/{course}/get');

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $course = factory(\App\Models\Course::class)->create();

        $response = $this->post('coursetime/{course}', [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    // test cases...
}
