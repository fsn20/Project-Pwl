namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }

        return back()->with('error', 'Login gagal');
    }

    public function register(Request $request)
    {
        // simple register (bisa kamu upgrade nanti)
        return back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}