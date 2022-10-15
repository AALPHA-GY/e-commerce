<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Mail;
use App\Mail\DocumentSend;
use App\Models\DocumentGallery;
use App\Models\DocumentType;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Document $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Document $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Document $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Document $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }


    public function sendMail(Request $request)
    {
        $mail = $request->email;
        $files = [];
        foreach ($request->documents as $document) {
            $file_url = DocumentGallery::find($document);
            $files[] = array('file' => public_path($file_url->document_url), 'options' => []);
        }

        Mail::to($mail)->send(new DocumentSend($files,$request->company));
        return response()->json([
            'success' => true,
            'message' => 'Gönderim Başarılı'
        ], Response::HTTP_OK);

    }

    public function getDocumentName($id)
    {
        $user_document = auth()->user()->documents()->whereDocumentTypeId($id)->get();
        $documents = [];

        foreach ($user_document as $document) {
            $galleries = $document->document_galleries()->get();
            $documents[] = [
                'documentname' => $document->document_name,
                'document' => $galleries
            ];
        }
        return response()->json([
            'success' => true,
            'message' => 'Evrak Getirme Başarılı',
            'data' => $documents
        ], Response::HTTP_OK);
    }

    public function getDocument()
    {
        return 'https://mukellef.erensengun.com/public/documents/test.pdf';
    }
}
