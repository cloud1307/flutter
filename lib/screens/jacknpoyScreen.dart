import 'dart:html';

import 'package:flutter/material.dart';
import 'package:team_luna/utilities/constant.dart';
import 'dart:math';

class JacknPoyApp extends StatefulWidget {
  @override
  _JacknPoyAppState createState() => _JacknPoyAppState();
}

class _JacknPoyAppState extends State<JacknPoyApp> {
  @override
  var computerScore = 0;
  var userScore = 0;
  var randomPic = 1;
  String statement = '';

  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(
          'Jack em\' Poy',
          style: appBarLabel,
        ),
        backgroundColor: Colors.redAccent,
        centerTitle: true,
      ),
      body: SafeArea(
        child: Stack(
          children: <Widget>[
            Container(
              height: double.infinity,
              child: SingleChildScrollView(
                physics: AlwaysScrollableScrollPhysics(),
                padding: EdgeInsets.symmetric(
                  horizontal: 20,
                ),
                child: Column(
                  mainAxisAlignment: MainAxisAlignment.center,
                  children: <Widget>[
                    Center(
                      child: Text(
                        'Score Board',
                        style: appBarLabel,
                      ),
                    ),
                    Center(
                      child: Text(
                        'Computer Score ${computerScore} : ${userScore} Your Score',
                        style: labelTextStyle,
                      ),
                    ),
                    Column(
                      children: <Widget>[
                        Text(
                          '$statement',
                          style: buttonTextstyle,
                        ),
                        SizedBox(
                          height: 10.0,
                        ),
                        Container(
                          width: 300,
                          height: 270,
                          alignment: Alignment.center,
                          decoration: BoxDecoration(
                              border:
                                  Border.all(color: Colors.black, width: 4.0),
                              borderRadius: BorderRadius.circular(8),
                              boxShadow: [
                                BoxShadow(
                                  color: Colors.greenAccent,
                                  offset: Offset(6.0, 6.0),
                                ),
                              ]),
                          child: Image.asset(
                              'images/JacknPoy/jacknpoy${randomPic}.png'),
                        ),
                        SizedBox(
                          height: 20.0,
                        ),
                        Row(
                          mainAxisAlignment: MainAxisAlignment.center,
                          children: <Widget>[
                            ClipOval(
                              child: Material(
                                color: Colors.blue, // button color
                                child: InkWell(
                                  splashColor: Colors.red, // inkwell color
                                  child: SizedBox(
                                    width: 100,
                                    height: 100,
                                    child: Image.asset('icons/rock_icon.png'),
                                  ),
                                  onTap: () {
                                    setState(() {
                                      randomPic = Random().nextInt(3) + 1;

                                      if (randomPic == 3) {
                                        statement = 'Draw Same with Computer';
                                      } else if (randomPic == 1) {
                                        computerScore++;
                                        statement = 'Your Points';
                                      } else {
                                        userScore++;
                                        statement = 'Computer Points';
                                      }
                                    });
                                  },
                                ),
                              ),
                            ),
                            SizedBox(
                              width: 40.0,
                            ),
                            ClipOval(
                              child: Material(
                                color: Colors.blue, // button color
                                child: InkWell(
                                  splashColor: Colors.red, // inkwell color
                                  child: SizedBox(
                                    width: 100,
                                    height: 100,
                                    child: Image.asset('icons/paper_icon.png'),
                                  ),
                                  onTap: () {
                                    setState(() {
                                      randomPic = Random().nextInt(3) + 1;
                                      if (randomPic == 1) {
                                        statement = 'Draw Same with Computer';
                                      } else if (randomPic == 3) {
                                        userScore++;
                                        statement = 'Your Points';
                                      } else {
                                        computerScore++;
                                        statement = 'Computer Points';
                                      }
                                    });
                                  },
                                ),
                              ),
                            ),
                            SizedBox(
                              width: 40.0,
                            ),
                            ClipOval(
                              child: Material(
                                color: Colors.blue, // button color
                                child: InkWell(
                                  splashColor: Colors.red, // inkwell color
                                  child: SizedBox(
                                    width: 100,
                                    height: 100,
                                    child:
                                        Image.asset('icons/scissor_icon.png'),
                                  ),
                                  onTap: () {
                                    setState(() {
                                      randomPic = Random().nextInt(3) + 1;

                                      if (randomPic == 2) {
                                        statement = 'Draw Same with Computer';
                                      } else if (randomPic == 1) {
                                        userScore++;

                                        statement = 'Your Points';
                                      } else {
                                        computerScore++;
                                        statement = 'Computer Points';
                                      }
                                    });
                                  },
                                ),
                              ),
                            ),
                          ],
                        ),
                        SizedBox(
                          height: 10.0,
                        ),
                        FlatButton(
                          onPressed: () {
                            setState(() {
                              computerScore = 0;
                              userScore = 0;
                            });
                          },
                          child: Container(
                            height: 50,
                            width: 150,
                            alignment: Alignment.center,
                            decoration: BoxDecoration(
                                border:
                                    Border.all(color: Colors.red, width: 4.0),
                                borderRadius: BorderRadius.circular(8),
                                boxShadow: [
                                  BoxShadow(
                                    color: Colors.redAccent,
                                    offset: Offset(6.0, 6.0),
                                  ),
                                ]),
                            child: Text(
                              'Reset Game',
                              style: buttonTextstyle,
                            ),
                          ),
                        ),
                      ],
                    ),
                  ],
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
