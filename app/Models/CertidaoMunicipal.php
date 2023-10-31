<?php

namespace App\Models;

use App\Interfaces\IDocument;
use Illuminate\Http\Request;

class CertidaoMunicipal extends Document implements IDocument
{
    public static function createDoc(Request $request, Company $company)
    {
        $url = $request->certidoes['municipal']->store('public/'.$company->cnpj);
        list($dir, $razaoSocial, $name) = explode("/", $url);

        $company->documents()->create([
            'tipo_documento' => 'municipal',
            'ultima_atualizacao' => now(),
            'url_arquivo' => $razaoSocial.'/'.$name
        ]);
    }

    public static function updateDoc(Request $request, Company $company)
    {
        $certidaoFederal = $company->documents()
            ->where('tipo_documento', 'municipal')->first();

        $url = $request->certidoes['municipal']->store('public/'.$company->cnpj);
        list($dir, $razaoSocial, $name) = explode("/", $url);

        $certidaoFederal->update([
            'tipo_documento' => 'municipal',
            'ultima_atualizacao' => now(),
            'url_arquivo' => $razaoSocial.'/'.$name
        ]);
    }
}
