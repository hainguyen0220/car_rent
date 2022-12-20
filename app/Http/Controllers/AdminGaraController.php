<?php

namespace App\Http\Controllers;

use App\Http\Requests\GaraAddRequest;
use App\Models\Gara;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminGaraController extends Controller
{
    use StorageImageTrait;
    private $gara;
    public function __construct(Gara $gara)
    {
        $this->gara = $gara;
    }
    public function index()
    {
        $garas = $this->gara->paginate(5);
        return view('admin.gara.index', compact('garas')); 
    }

    public function create()
    {
        return view('admin.gara.add'); 
    }

    public function store(GaraAddRequest $request)
    {

        try {
            $dataInsert = [
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
                'describe' => $request->describe,
                
            ];
            $dataImageGara = $this->storageTraitUpload($request, 'image', 'gara');

            if (!empty($dataImageGara)) {
                $dataInsert['image'] = $dataImageGara['file_path'];
            }

            $this->gara->create($dataInsert);
            return redirect()->route('gara.index');
        } catch (\Exception $exception) {
            Log::error('Lỗi : ' . $exception->getMessage() . '---Line: ' . $exception->getLine());
        }
    }
}
