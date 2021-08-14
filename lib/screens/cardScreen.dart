import 'dart:html';
import 'dart:math';

import 'package:flutter/material.dart';
import 'package:team_luna/utilities/constant.dart';

class CardApp extends StatefulWidget {
  @override
  _CardAppState createState() => _CardAppState();
}

class _CardAppState extends State<CardApp> {
  var userCardScore = 0;
  var computerCardScore = 0;
  var CardsType = ['Club', 'Heart', 'Spade', 'Diamond'];
  var randomNumber = Random().nextInt(13) + 1;
  dynamic RandomCards = 'Club';
  final randomNow = Random();

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(
          'High And Low Card',
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
                        'Computer Score ${computerCardScore} : ${userCardScore} Your Score',
                        style: labelTextStyle,
                      ),
                    ),
                    Column(
                      children: <Widget>[
                        Container(
                          width: 250,
                          height: 300,
                          alignment: Alignment.center,
                          decoration: BoxDecoration(
                              border: Border.all(
                                  color: Colors.blueAccent, width: 4.0),
                              borderRadius: BorderRadius.circular(8),
                              boxShadow: [
                                BoxShadow(
                                  color: Colors.lightBlueAccent,
                                  offset: Offset(6.0, 6.0),
                                ),
                              ]),
                          child: Image.asset(
                              'images/Cards/Cards-${randomNumber}-${RandomCards}.png'),
                        ),
                        SizedBox(
                          height: 50.0,
                        ),
                        Row(
                          mainAxisAlignment: MainAxisAlignment.center,
                          children: <Widget>[
                            FlatButton(
                              onPressed: () {
                                setState(() {
                                  RandomCards = CardsType[
                                      randomNow.nextInt(CardsType.length)];
                                  randomNumber = Random().nextInt(13) + 1;

                                  if (randomNumber >= 8) {
                                    userCardScore++;
                                  } else {
                                    computerCardScore++;
                                  }
                                });
                              },
                              child: Container(
                                height: 50,
                                width: 150,
                                alignment: Alignment.center,
                                decoration: BoxDecoration(
                                    border: Border.all(
                                        color: Colors.green, width: 4.0),
                                    borderRadius: BorderRadius.circular(8),
                                    boxShadow: [
                                      BoxShadow(
                                        color: Colors.greenAccent,
                                        offset: Offset(6.0, 6.0),
                                      ),
                                    ]),
                                child: Text(
                                  'High Cards',
                                  style: buttonTextstyle,
                                ),
                              ),
                            ),
                            SizedBox(
                              width: 80,
                            ),
                            FlatButton(
                              onPressed: () {
                                setState(() {
                                  RandomCards = CardsType[
                                      randomNow.nextInt(CardsType.length)];
                                  randomNumber = Random().nextInt(13) + 1;

                                  if (randomNumber <= 7) {
                                    userCardScore++;
                                  } else {
                                    computerCardScore++;
                                  }
                                });
                              },
                              child: Container(
                                height: 50,
                                width: 150,
                                alignment: Alignment.center,
                                decoration: BoxDecoration(
                                    border: Border.all(
                                        color: Colors.green, width: 4.0),
                                    borderRadius: BorderRadius.circular(8),
                                    boxShadow: [
                                      BoxShadow(
                                        color: Colors.greenAccent,
                                        offset: Offset(6.0, 6.0),
                                      ),
                                    ]),
                                child: Text(
                                  'Low Cards',
                                  style: buttonTextstyle,
                                ),
                              ),
                            ),
                          ],
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
