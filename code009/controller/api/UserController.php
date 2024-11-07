<?php 
class UserController extends BaseController 
{
    public function listAction(): void
    {
        $errorDescription = '';
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $strParamsArray = $this->getStringParams();

        if (strtoupper($requestMethod) == 'GET') {
            try {
                $userModel = new UserModel();

                $intLimit = 10;
                if (isset($strParamsArray['limit']) && $strParamsArray['limit']) {
                    $intLimit = $strParamsArray['limit'];
                }

                $usersArray = $userModel->getUsers($intLimit);
                $responseData = json_encode($usersArray);
            } catch (Error $e) {
                $errorDescription = $e->getMessage() . 'Something went wrong! Please contact our support.';
                $errorHeader = 'HTTP/1.1 500 Internal Server Error';
            }
        } else {
            $errorDescription = 'Method not supported';
            $errorHeader = 'HTTP/1.1 422 Unprocessable Entity';
        }

        //send output
        if (!$errorDescription) {
            $this->sendOutput(
                $responseData,
                ['Content-Type: application/json', 'HTTP/1.1 200 OK']
            );
        } else {
            $this->sendOutput(json_encode(array('error' => $errorDescription)), 
            ['Content-Type: application/json', $errorHeader]);
        }
    }
}