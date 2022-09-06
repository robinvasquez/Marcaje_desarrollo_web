import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.scss']
})
export class RegisterComponent {
  title = 'tarea_2_registro';

  person = {
    "name": "Prueba Usuario",
    "email": "test@test.com",
    "password": "password",
    "password_confirmation": "password"
  }
  //Escribir codigo aquí :D
}
