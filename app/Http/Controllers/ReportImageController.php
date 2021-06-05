<?php
namespace App\Http\Controllers;

use File;
use App\Models\Report;
use App\Models\ReportImage;
use Illuminate\Http\Request;

class ReportImageController extends Controller
{

    public function update(Request $request)
    {
        $report = Report::find($request->id);

        //dd($report);
        //dd($request->all());

        $validated = $this->validate($request, [
        'title' => 'required',
        'date' => 'required',
        'description' => 'required',
        'intervention' => 'required',
        ]);

        //dd($validated);

        $report->title = $request->title;
        $report->description = $request->description;
        $report->intervention = $request->intervention;
        $report->status = $request->status;
        $report->resolution = $request->resolution;

        if($request->hasFile('photos'))
        {
            $allowedfileExtension=['JPG','PNG'];
            $files = $request->file('photos');
            foreach($files as $file)
            {
                //dd($file);
                $ruta = public_path().'/images/reports/'.$report->title;
                $nombre_fichero  = uniqid().'-'.$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check)
                {
                    $subido = $file->move($ruta,$nombre_fichero);
                    if($subido)
                        {
                            $image = new ReportImage;
                            $image->name = $nombre_fichero;
                            $image->report_id = $report->id;
                            $image->save();
                        }
                }
                //$nombre = $photo->store('photos');
            }
        }

        if($report->save())
        {
            $aviso = "Se ha actualizado el reporte con éxito";
        }
        else
        {
            $aviso = "No se ha actualizado correctamente, inténtelo de nuevo";
        }

        return back()->with(compact('aviso'));
    }

    public function destroy(Request $request)
    {
        $reportImage = ReportImage::find($request->imagen);

        $ruta = public_path().'/images/reports/'.$reportImage->report->title."/".$reportImage->name;
        $deleted = File::delete($ruta);

        if($deleted)
        {
            $reportImage->delete();
            $aviso = "La imagen se ha borardo con éxito";
        }
        return back()->with(compact('aviso'));
    }
}
