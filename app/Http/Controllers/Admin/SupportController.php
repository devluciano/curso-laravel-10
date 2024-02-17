<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Http\Request;
use Psy\Sudo;

class SupportController extends Controller
{
    public function __construct(protected SupportService $service)
    {}
    
    /*Method index*/
    public function index(Request $request)
    {
         
        $supports = $this->service->getAll($request->filter);

        return view("admin.supports.index", compact("supports"));
    }

    /*Method show*/
    public function show(string $id)
    {
        if (!$support = $this->service->findOne($id)) {
            return back();
        }

        return view('admin.supports.show', compact('support'));
    }

    /*Method create*/
    public function create()
    {
        return view("admin.supports.create");
    }

    /*Method store*/
    public function store(StoreUpdateSupport $request, Support $support) 
    {
        $data = $request->validated();
        $data['status'] = 'a';

        $support->create($data);
        return redirect()->route('supports.index');
    }

    /*Method edit*/
    public function edit(string $id)
    {
        if (!$support = $this->service->findOne($id)) {
            return back();
        }

        return view('admin.supports.edit', compact('support'));

    }

    /*Method update*/
    public function update(StoreUpdateSupport $request, Support $support, string $id)
    {
        if (!$support = $support->find($id)) {
            return back();
        }

        $support->update($request->validated());

        return redirect()->route('supports.index');
    }

    /*Method destroy*/
    public function destroy(string $id) 
    {
        $this->service->delete($id);

        return redirect()->route('supports.index');
    }
}
