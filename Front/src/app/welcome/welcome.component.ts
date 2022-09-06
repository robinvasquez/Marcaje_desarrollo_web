import { Component, OnInit, AfterViewInit } from '@angular/core';
import { Injectable } from '@angular/core';


@Component({
  selector: 'app-root',
  templateUrl: './welcome.component.html',
  styleUrls: ['./welcome.component.scss']
})

@Injectable({
  providedIn: 'root'
})


export class WelcomeComponent implements OnInit, AfterViewInit{
  ngAfterViewInit(): void {
    throw new Error('Method not implemented.');
  }
  title = 'tarea_2_registro';
  
  now!: Date;
 
  ngOnInit() {
 
    this.now = new Date();
 
    setInterval(() => {
 
      this.now = new Date();
 
    }, 1000);
 
  }
  //Escribir codigo aquí :D
}

