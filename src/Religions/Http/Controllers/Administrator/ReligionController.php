<?php

namespace Myrtle\Core\Religions\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Myrtle\Religions\Models\Religion;

class ReligionController extends Controller
{

	public function index()
	{
		$religions = Religion::orderBy('name')->paginate();

		return view('admin::religions.index')->withReligions($religions);
	}

	public function create(Religion $religion)
	{
		return view('admin::religions.create')->withReligion($religion);
	}

	public function store(Request $request, Religion $religion)
	{
		$religion->create($request->toArray());

		flasher()->alert('Religion added successfully', 'success');

		return redirect(route('admin.religions.index'));
	}

	public function edit(Religion $religion)
	{
		return view('admin::religions.edit')->withReligion($religion);
	}

	public function update(Request $request, Religion $religion)
	{
		$religion->update($request->toArray());

		flasher()->alert('Religion updated successfully', 'success');

		return redirect(route('admin.religions.index'));
	}

    public function destroy(Request $request, Religion $religion)
    {
        $this->authorize('delete', $religion);

        $religion->delete();

        flasher()->alert('Religion removed successfully', 'success');

        return redirect(route('admin.religions.index'));
    }
}
