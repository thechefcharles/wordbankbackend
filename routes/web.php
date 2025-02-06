use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'status' => 'Backend is working',
        'Laravel' => app()->version(),
    ]);
});

require __DIR__.'/auth.php';
