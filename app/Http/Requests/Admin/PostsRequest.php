<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
            'image' => 'image',
            'status' => 'required|integer',
            'category_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Opss, informe um titulo para cadastrar um post',
            'subtitle.required' => 'Opss, informe um subtitulo para cadastrar um post',
            'body.required' => 'Opss, informe um conteúdo para cadastrar um post',
            'image.image' => 'Opss, informe uma imagem e não um arquivo para cadastrar um post',
            'status.required' => 'Opss, informe um status para cadastrar um post',
            'status.integer' => 'Opss, informe um status para cadastrar um post',
            'category_id' => 'Opss, informe uma categoria para cadastrar um post',
        ];
    }
}
