package me.imantabrizian.example;

import javax.servlet.annotation.WebServlet;
import java.io.IOException;
import java.io.PrintWriter;

/**
 * Created by iman on 8/23/16.
 */
@WebServlet(urlPatterns = {"/Servlet"})
public class SampleServlet extends javax.servlet.http.HttpServlet {
    protected void doPost(javax.servlet.http.HttpServletRequest request, javax.servlet.http.HttpServletResponse response) throws javax.servlet.ServletException, IOException {

    }

    protected void doGet(javax.servlet.http.HttpServletRequest request, javax.servlet.http.HttpServletResponse response) throws javax.servlet.ServletException, IOException {
        System.out.println("Simple Servlet");
        PrintWriter pw = response.getWriter();
        pw.println("This is <i>bold</i>");
    }
}
