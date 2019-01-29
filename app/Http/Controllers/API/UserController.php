<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
class UserController extends Controller
{
public $successStatus = 200;
/**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        $user=User::all()->toArray();
        if(Auth::attempt(['name' => request('name'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')-> accessToken;
            return response()->json(array('user' => $user,'token' => $success), $this-> successStatus);
            //return response()->json(array($user,$success), $this-> successStatus);
            //return response()->json( $success, $this-> successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function get_user_by_id($id){
        $user = User::find($id);
        return response()->json(array('user' => $user), $this->successStatus);
    }
/**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
$input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')-> accessToken;
        $success['name'] =  $user->name;
return response()->json(['success'=>$success], $this-> successStatus);
    }
/**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        // $user = Auth::user();
          $user = user::all();
        return response()->json(['success' => $user], $this-> successStatus);
    }
}
