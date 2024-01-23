<?php
namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CampaignController extends Controller
{
    public function create()
    {
        return view('advertiser.campaign.store');
    }

    public function store(Request $request)
    {
        $campaign = new Campaign();
        $campaign->name = $request->name;
        $campaign->format = $request->format;
        $campaign->size = $request->size;
        $campaign->feed = $request->feed;
        $campaign->vertical = $request->vertical;
        $campaign->status = "submitted";
        $campaign->save();

        return redirect()->route('advertiser.campaigns');
    }

    public function index()
    {
        $campaigns = Campaign::all();
        return view('advertiser.campaign.index', ['campaigns' => $campaigns]);
    }
}
