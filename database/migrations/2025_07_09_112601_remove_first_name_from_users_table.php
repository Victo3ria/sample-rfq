    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            // Check if the 'first_name' column exists before trying to drop it
            if (Schema::hasColumn('users', 'first_name')) {
                Schema::table('users', function (Blueprint $table) {
                    $table->dropColumn('first_name');
                });
            }
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            // If you ever rollback, this would add 'first_name' back as nullable
            // You can adjust this if you want it to be non-nullable on rollback
            Schema::table('users', function (Blueprint $table) {
                $table->string('first_name')->nullable();
            });
        }
    };
    