     // UPDATE
    public function PostPut(Request $request,$id)
        {
   
    $imageUrl = $this->imageExistStatus($request);
    $post = Post::find($request->$id);
    $post->ptitle = $request->ptitle;
    $post->categoryid = $request->categoryid;
    $post->pcontent = $request->pcontent;
    $post->ptag = $request->ptag;

    $post->save();
    return response()->json($post);
        }


    private function imageExistStatus($request) {
    $postbyid = Post::where('id', $request->id)->first();
        $postImage = $request->file('image');
        if ($postImage) {
            unlink($postbyid->postImage);
        $name = $postImage->getClientOriginalName();
        $UploadPath ='public/Admin/PostImage/';
        $postImage->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;
        } else {
            $imageUrl = $postbyid->postImage;
        }
        return $imageUrl;
    }