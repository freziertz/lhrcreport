<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function attendance(Request $request)
    {

        $startdate = $request->startdate;
        $enddate = $request->enddate;
        $branch = $request->branch;
        $unit = $request->unit;
        $advocate = $request->advocate;
        $reportParameter = [];
        $title = 'Clients Attendance Register';
        $n = (int) $request->report_id;
        $attendence = false;
        $reconciliation = false;
        $owndefend = false;
        $kit = false;
        $represented = false;
        $followup = false;





        switch ($n) {

            case 1:
                $values = [ $startdate, $enddate, $branch];
                $reports = DB::select('exec spNewOldCaseListByCategory  ?,?,?', $values);
                $reportParameter['branch'] = $branch;
                $reportParameter['unit'] = null;
                $reportParameter['advocate'] = null;
                $reportParameter['title'] = $title. ': ' . $branch . ' '. $startdate . ' to '. $enddate ;
                $rpt = 1;
                $attendence = true;
                break;

            case 2:
                $values = [ $startdate, $enddate, $branch, $unit];
                $reports = DB::select('exec spNewOldCaseListByCategoryUnitwise  ?,?,?,?', $values);
                $reportParameter['branch'] = $branch;
                $reportParameter['unit'] = $unit;
                $reportParameter['advocate'] = null;
                $reportParameter['title'] = $title. ': ' . $branch . '- ' .$unit. ' ' . $startdate . ' to '. $enddate ;
                $rpt = 2;
                $attendence = true;
                break;
            case 3:
                $values = [ $startdate, $enddate, $branch, $unit, $advocate];
                $reports = DB::select('exec spNewOldCaseListByCategoryUnitwisePerIndividual  ?,?,?,?,?', $values);
                $reportParameter['branch'] = $branch;
                $reportParameter['unit'] =  $unit;
                $reportParameter['advocate'] = $advocate;
                $reportParameter['title'] = $title. ': ' . $branch . ' by ' .$advocate . ' from ' . $startdate . ' to '. $enddate;
                $rpt = 3;
                $attendence = true;
                break;

            case 4:
                $values = [ $startdate, $enddate];
                $reports = DB::select('exec spNewOldCaseListByCategoryAll  ?,?', $values);
                $reportParameter['branch'] = null;
                $reportParameter['unit'] = null;
                $reportParameter['advocate'] = null;
                $reportParameter['title'] = $title. ' for All ' . $startdate . ' to '. $enddate;
                $rpt = 4;
                $attendence = true;
                break;

            case 5:
                $values = [ $startdate, $enddate, $branch ];
                $reports = DB::select('exec spGetIssuesByDate  ?,?,?', $values);
                $reportParameter['branch'] = $branch;
                $reportParameter['title'] = 'Issues for Advocacy - ' .$branch. ' from ' . $startdate . ' to '. $enddate;
                $rpt = 5;
                $attendence = false;
                break;

            case 6:
                $values = [ $startdate, $enddate, $branch ];
                $reports = DB::select('exec spGetReconciliationCaseList  ?,?,?', $values);
                $reportParameter['branch'] = $branch;
                $reportParameter['title'] = 'Cases Subjected to Reconciliation - ' .$branch. ' from ' . $startdate . ' to '. $enddate;
                $rpt = 6;
                $attendence = false;
                $reconciliation = true;
                break;

            case 7:
                $values = [ $startdate, $enddate, $branch];
                $reports = DB::select('exec spGetOwnDefendCaseList  ?,?,?', $values);
                $reportParameter['branch'] = $branch;
                $reportParameter['unit'] = null;
                $reportParameter['advocate'] = null;
                $reportParameter['title'] = 'Clients Assisted to defend their own cases in Court: ' .$branch . ' from '. $startdate . ' to '. $enddate;
                $rpt = 7;
                $owndefend = true;
                break;

            case 8:
                $values = [ $startdate, $enddate, $branch];
                $reports = DB::select('exec spGetSelfHelpKitListByDate  ?,?,?', $values);
                $reportParameter['branch'] = $branch;
                $reportParameter['unit'] = null;
                $reportParameter['advocate'] = null;
                $reportParameter['title'] = 'Self Help Kits Distributed to Clients: ' . $branch . ' '. $startdate . ' to '. $enddate ;
                $rpt = 8;
                $kit = true;
                break;

            case 9:
                $values = [ $startdate, $enddate,  $unit];
                $reports = DB::select('exec spGetSelfHelpKitListByDateAndUnit  ?,?,?', $values);
                $reportParameter['branch'] = $branch;
                $reportParameter['unit'] = $unit;
                $reportParameter['advocate'] = null;
                $reportParameter['title'] = 'Self Help Kits Distributed to Clients: ' .$unit. ' from ' . $startdate . ' to '. $enddate ;
                $rpt = 9;
                $kit = true;
                break;

            case 10:
                $values = [ $startdate, $enddate, $advocate];
                $reports = DB::select('exec spGetSelfHelpKitListByDateAndProvider  ?,?,?', $values);
                $reportParameter['branch'] = $branch;
                $reportParameter['unit'] =  $unit;
                $reportParameter['advocate'] = $advocate;
                $reportParameter['title'] = 'Self Help Kits Distributed to Clients:  by ' .$advocate . ' from ' . $startdate . ' to '. $enddate;
                $rpt = 10;
                $kit = true;
                break;

            case 11:
                $values = [ $startdate, $enddate, $branch];
                $reports = DB::select('exec spGetCaseRepresentedByAdvocate  ?,?,?', $values);
                $reportParameter['branch'] = null;
                $reportParameter['unit'] = null;
                $reportParameter['advocate'] = null;
                $reportParameter['title'] = 'Appearances for Clients Represented by LHRC advocates in Court from ' . $startdate . ' to '. $enddate ;
                $rpt = 11;
                $represented  = true;
                break;

            case 12:
                $values = [ $startdate, $enddate, $branch];
                $reports = DB::select('exec spGetFollowedUpCases  ?,?,?', $values);
                $reportParameter['branch'] = null;
                $reportParameter['unit'] = null;
                $reportParameter['advocate'] = null;
                $reportParameter['title'] = 'Follow up: ' .$branch. ' from ' . $startdate . ' to '. $enddate ;
                $rpt = 12;
                $followup  = true;
                break;

            case 13:
                $values = [ $startdate, $enddate, $advocate];
                $reports = DB::select('exec spGetFollowedUpCasesPerAdvocate  ?,?,?', $values);
                $reportParameter['branch'] = null;
                $reportParameter['unit'] = null;
                $reportParameter['advocate'] = null;
                $reportParameter['title'] = 'Follow up by: ' .$advocate. ' from ' . $startdate . ' to '. $enddate ;
                $rpt = 13;
                $followup  = true;
                break;

            case 14:
                $values = [ $startdate, $enddate, $branch];
                $reports = DB::select('exec spGetCaseListRepresentedByAdvocate  ?,?,?', $values);
                $reportParameter['branch'] = null;
                $reportParameter['unit'] = null;
                $reportParameter['advocate'] = null;
                $reportParameter['title'] = 'List of Cases/Clients Represented by Advocates from:  ' . $startdate . ' to '. $enddate ;
                $rpt = 14;
                break;

            case 15:
                $values = [ $startdate, $enddate];
                $reports = DB::select('exec spGetClinicList  ?,?', $values);
                $reportParameter['branch'] = null;
                $reportParameter['unit'] = null;
                $reportParameter['advocate'] = null;
                $reportParameter['title'] = 'Clinic List from  ' . $startdate . ' to '. $enddate ;
                $rpt = 15;
                break;






            default:
            $values = [ $startdate, $enddate];
            $reports = DB::select('exec spNewOldCaseListByCategoryAll  ?,?', $values);
            $reportParameter['branch'] = null;
            $reportParameter['unit'] = null;
            $reportParameter['advocate'] = null;
            $reportParameter['title'] = $title. ' for All from '. $startdate . ' to '. $enddate;
            $attendence = true;

        }


    //     $values = [ $startdate,$enddate,$branch,$unit];
    //    $reports = DB::select('exec spNewOldCaseListByCategory  ?,?,?,?', $values);
     if ( $attendence ){
        $NewMaleTotal = 0;
        $NewFemaleTotal = 0;
        $NewTotal = 0;
        $OldMaleTotal = 0;
        $OldFemaleTotal = 0;
        $OldTotal = 0;
        $GrandTotal = 0;

        foreach( $reports as $report){
            $NewMaleTotal += $report->NewMale;
            $NewFemaleTotal+= $report->NewFemale;
            $NewTotal += $report->NewTotal;
            $OldMaleTotal += $report->OldMale;
            $OldFemaleTotal += $report->OldFemale;
            $OldTotal += $report->OldTotal;
            $GrandTotal += $report->GrandTotal;

        }

       $reportTotal = [
          'NewMaleTotal' => $NewMaleTotal,
          'NewFemaleTotal' => $NewFemaleTotal,
          'NewTotal' => $NewTotal,
          'OldMaleTotal' => $OldMaleTotal,
          'OldFemaleTotal' => $OldFemaleTotal,
          'OldTotal' => $OldTotal,
          'GrandTotal' => $GrandTotal
       ];

    }

    if ( $reconciliation ){
        $MaleTotal = 0;
        $FemaleTotal = 0;
        $Total = 0;
        $Win = 0;
        $Pending = 0;
        $Lose = 0;
        $TotalStatus = 0;

        foreach( $reports as $report){
            $MaleTotal += $report->Male;
            $FemaleTotal+= $report->Female;
            $Total += $report->Total;
            $Win += $report->Win;
            $Pending += $report->Pending;
            $Lose += $report->Lose;
            $TotalStatus += $report->TotalStatus;

        }

       $reportTotal = [
          'MaleTotal' => $MaleTotal,
          'FemaleTotal' => $FemaleTotal,
          'Total' => $Total,
          'WinTotal' => $Win,
          'PendingTotal' => $Pending,
          'LoseTotal' => $Lose,
          'TotalStatus' => $TotalStatus
       ];

    }

    if ( $owndefend ||  $represented ||  $followup ){
        $MaleTotal = 0;
        $FemaleTotal = 0;
        $Total = 0;


        foreach( $reports as $report){
            $MaleTotal += $report->Male;
            $FemaleTotal+= $report->Female;
            $Total += $report->Total;


        }

       $reportTotal = [
          'MaleTotal' => $MaleTotal,
          'FemaleTotal' => $FemaleTotal,
          'Total' => $Total,
       ];

    }



    if ( $kit ){
        $MaleTotal = 0;
        $FemaleTotal = 0;
        $Total = 0;


        foreach( $reports as $report){
            $MaleTotal += $report->Male;
            $FemaleTotal+= $report->FEMALE;
            $Total += $report->Total;


        }

       $reportTotal = [
          'MaleTotal' => $MaleTotal,
          'FemaleTotal' => $FemaleTotal,
          'Total' => $Total,
       ];

    }


       //dd($reportTotal);

        //return view('reports.attendance', compact('reports','reportTotal','reportParameter'));

        switch ($rpt) {

            case 1:
                return view('reports.attendance', compact('reports','reportTotal','reportParameter'));
                break;

            case 2:
                return view('reports.attendance', compact('reports','reportTotal','reportParameter'));
                break;

            case 3:
                return view('reports.attendance', compact('reports','reportTotal','reportParameter'));
                break;

            case 4:
                return view('reports.attendance', compact('reports','reportTotal','reportParameter'));
                break;

            case 5:
                return view('reports.issues', compact('reports','reportParameter'));
                break;

            case 6:
                return view('reports.reconciliation', compact('reports','reportTotal','reportParameter'));
                break;

            case 7:
                return view('reports.owndefend', compact('reports','reportTotal','reportParameter'));
                break;

            case 8:
                return view('reports.kit', compact('reports','reportTotal','reportParameter'));
                break;

            case 9:
                return view('reports.kit', compact('reports','reportTotal','reportParameter'));
                break;

            case 10:
                return view('reports.kit', compact('reports','reportTotal','reportParameter'));
                break;

            case 11:
                return view('reports.represented', compact('reports','reportTotal','reportParameter'));
                break;

            case 12:
                return view('reports.followup', compact('reports','reportTotal','reportParameter'));
                break;

            case 13:
                return view('reports.followup', compact('reports','reportTotal','reportParameter'));
                break;


            case 14:
                foreach($reports as $report){
                    $dt = new Carbon($report->currentdate);
                    $report->currentdate = $dt->toFormattedDateString();
                }
                return view('reports.representedbyadvocate', compact('reports','reportParameter'));
                break;

            case 15:
                foreach($reports as $report){
                    $dt = new Carbon($report->clientattendeddate);
                    $report->clientattendeddate = $dt->calendar();
                }

                return view('reports.cliniclist', compact('reports','reportParameter'));
                break;




            default:


        }

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reportParameter['title'] = 'LAMS Report';
        return view('reports.create',compact('reportParameter'));
    }


}
