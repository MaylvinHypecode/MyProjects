import { Component, OnInit } from '@angular/core';
declare var $: any;
@Component({
  selector: 'app-calendrier',
  templateUrl: './calendrier.component.html',
  styleUrls: ['./calendrier.component.css']
})
export class CalendrierComponent implements OnInit {
  title = 'easyfullcalendar';
ngOnInit() {
       setTimeout(() => {
        $('#calendar').fullCalendar({
                        header: {
                            left   : 'prev,next today',
                            center : 'title',
                            right  : 'month,agendaWeek,agendaDay'
                        },
                        navLinks   : true,
                        editable   : true,
                        eventLimit : true,
                        events: [
                            {
                                title : 'This is your',
                                start : '2019-03-03T12:30:00',
                                color : '#f9c66a'
                            },
                            {
                                title : 'Your meeting with john',
                                start : '2019-03-07T12:30:00',
                                end   : '2019-03-09',
                                color : '#019efb'
                            },
                            {
                                title  : 'This is Today',
                                start  : '2019-03-12T12:30:00',
                                allDay : false,
                                color  : '#57cd5f'
                            }
                        ],
                    });
     }, 100);
   }
}
