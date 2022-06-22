<?php
 // Mảng số nguyên
        //- khai báo
                $book= ["van", "sư","dia"];
                $book_2=array("van","sư","dia");
        //- đưa phần tử vào mảng
        // c1
            array_push($book,"toan");
            // c2:
            $book[]="ly";
        //- truy cập phần tử
            echo $book[0]."<br>";
        //- duyệt phần tử
            for($i=0;$i<count($book);$i++){
                echo $book[$i]."<br>";
            };
        //- xóa phần tử
                array_splice($book,3,1);///xóa toán


        echo '<pre>';
        print_r($book);
        print_r($book_2);
        echo '</pre>';

        
    // Mảng liên kết
        //- khai báo
                $request=[
                    "usename"=>"nguyễn văn a",
                    "password"=>"12345"
                ];
        //- đưa phần tử vào mảng
                $request['age']=18;
                $request[]="ly";
                $request[]="hoa";

        //- truy cập phần tử
                // echo '<br>'.$request['usename'];
                // echo '<br>'.$request[1];
                

        //- duyệt phần tử
                foreach($request as $key=>$value){
                    echo "<br>".$key."-".$value;
                }

        //- xóa phần tử
                unset($request['password']);
                unset($request[0]);
                unset($request[1]);
                

        echo '<pre>';
        print_r($request);
        echo '</pre>';
    // Mảng đa chiều
        //- khai báo
                $tusach=[
                    ['toan','ly','hoa'],
                    ['van','su','dia']
                ];
        //- đưa phần tử vào mảng
                // $tusach[0][3]="sinh";

                // c2
                // array_push($tusach[0],"tiếng anh");
                // array_push($tusach,123);
            
        //- truy cập phần tử
            echo $tusach[0][1];
                
        //- duyệt phần tử
                for($i=0;$i<count($tusach);$i++){
                    for($j=0; $j<count($tusach[$i]);$j++){

                    }
                }


                $customers=[
                    [
                        "usenamr"=>"nguyen van a",
                        "age"=> 18
                    ],
                    [
                        "usenamr"=>"nguyen van b",
                        "age"=> 18
                    ],
                    [
                        "usenamr"=>"nguyen van c",
                        "age"=> 18
                    ]
                    ];


                    foreach($customers as $key => $customer){
                            echo'<br>'.$customer['usenamr'].'-'.$customer['age'];


                    }
        //- xóa phần tử
                    unset($customers[0]["usenamr"]);
                    unset($customers[2]);

        echo '<pre>';
        print_r($customers);
        echo '</pre>';