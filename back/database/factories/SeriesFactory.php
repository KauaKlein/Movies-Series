<?

namespace Database\Factories;

use App\Models\Series;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


class SeriesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = series::class;

    public function definition(): array
    {
        $faker = Faker::create();

        return [
            'season' => $faker->serie,
            'episode' => $faker->serie,
            'title' => $faker->serie,
            'genre' => $faker->serieGenre,
            'description' => $faker->overview,
            'release_year' => $faker->year,
        ];
    }
}
