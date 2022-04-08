<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'commentable_id' => 'required',
            'commentable_type' => 'required|in:Workshop,Item',
            'parent_id' => 'exists:comments,id',
            'comment' => 'required',
        ];
    }
}
