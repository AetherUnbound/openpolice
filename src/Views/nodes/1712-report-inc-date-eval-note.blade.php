 Status with the {!!
    str_replace("Police Department", "PD", 
        str_replace("Sheriff's Office", "Sheriff", 
            $deptName
        )
    ) 
!!} date of {!! $dateLabel !!} changed from {!! 
    str_replace('1/1', 'N/A', date('n/j', $oldDate)) 
!!} to {!! 
    str_replace('1/1', 'N/A', date('n/j', $newDate)) 
!!}. 